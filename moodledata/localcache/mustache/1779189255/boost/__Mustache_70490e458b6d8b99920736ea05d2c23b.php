<?php

class __Mustache_70490e458b6d8b99920736ea05d2c23b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="pe-3">
';
        $buffer .= $indent . '    <span>';
        $value = $context->find('str');
        $buffer .= $this->section76c29c3c70c2a820940044d6b68dac35($context, $indent, $value);
        $buffer .= '</span>
';
        $value = $context->find('appliedfilterscount');
        $buffer .= $this->sectionB8b1c75165cc0016581471ddf82c7c18($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section76c29c3c70c2a820940044d6b68dac35(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' advanced, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' advanced, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB8b1c75165cc0016581471ddf82c7c18(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="badge rounded-pill text-bg-primary ms-1">+{{.}}</span>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <span class="badge rounded-pill text-bg-primary ms-1">+';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
