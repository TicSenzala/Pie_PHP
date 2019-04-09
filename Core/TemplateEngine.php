<?php
namespace Core;

class TemplateEngine
{
    public static function templateEngine($engine)
    {
        $engine = preg_replace('#[{]{2}(.+)[}]{2}#', '<?= $1 ?>', $engine);
        $engine = preg_replace('#@if\s((.+))#', '<?php if($1): ?>', $engine);
        $engine = preg_replace('#@else#', '<?php else: ?>', $engine);
        $engine = preg_replace('#@elseif\s(.+)#', '<?php elseif($1): ?>', $engine);
        $engine = preg_replace('#@endif#', '<?php endif; ?>', $engine);
        $engine = preg_replace('#@foreach\s((.+))#', '<?php foreach($1): ?>', $engine);
        $engine = preg_replace('#@endforeach#', '<?php endforeach; ?>', $engine);
        $engine = preg_replace('#@isset\s((.+))#', '<?php if(isset($1)): ?>', $engine);
        $engine = preg_replace('#@endisset#', '<?php endif ?>', $engine);
        $engine = preg_replace('#@empty\s((.+))#', '<?php if(empty($1)): ?>', $engine);
        $engine = preg_replace('#@endempty#', '<?php endif ?>', $engine);
        return $engine;
    }
}
