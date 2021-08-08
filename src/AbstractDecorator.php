<?php

namespace QuillStack\Output;

class AbstractDecorator
{
    const COLOR = 'default';
    const CODE = '0';

    public function decorate(string $str): string
    {
        $reset = "\e[" . self::CODE . 'm';
        $wasColored = false;

        if (stristr($str, '<' . static::COLOR . '>')) {
            $wasColored = true;
        }

        $colored = str_ireplace('<' . static::COLOR . '>', "\e[" . static::CODE . 'm', $str);
        $colored = str_ireplace('</' . static::COLOR . '>', $reset, $colored);

        if ($wasColored && substr($colored, -4) !== $reset) {
            $colored .= $reset;
        }

        return $colored;
    }
}
