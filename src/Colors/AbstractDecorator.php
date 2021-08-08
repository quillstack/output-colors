<?php

namespace QuillStack\Output\Colors;

class AbstractDecorator
{
    const COLOR = 'default';
    const CODE = '0';

    public function decorate(string $str): string
    {
        $colored = $str;
        $reset = "\e[" . self::CODE . 'm';
        $wasColored = stristr($colored, '<' . static::COLOR . '>');

        if ($wasColored) {
            $colored = str_ireplace('<' . static::COLOR . '>', "\e[" . static::CODE . 'm', $colored);
        }

        $colored = str_ireplace('</' . static::COLOR . '>', $reset, $colored);

        if ($wasColored && substr($colored, -4) !== $reset) {
            $colored .= $reset;
        }

        return $colored;
    }
}
