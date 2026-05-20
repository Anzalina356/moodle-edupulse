<?php

class __Mustache_ace14ddac6c5d5efed8201a37262b4f8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="col-auto">
';
        $value = $context->find('perpage');
        $buffer .= $this->sectionAf45191b283287eecfe6ac283c4d6ecb($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="col">
';
        $value = $context->find('pagingbar');
        $buffer .= $this->sectionAf45191b283287eecfe6ac283c4d6ecb($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="col-auto">
';
        $value = $context->find('hassubmit');
        $buffer .= $this->section87570a5a3daa1d005874d2cacfe4d642($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionAf45191b283287eecfe6ac283c4d6ecb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{{.}}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC87198b06c7ce18b3aeed72afb34afb9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'disabled';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'disabled';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6c044fe8710d3502dd5cb9686c32f3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked="checked"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'checked="checked"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1e918c6c70c55c5df46542b790b2464(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notifystudents, mod_assign ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notifystudents, mod_assign ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9afe7a63bce6e8211d1f3b6a736886f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'save';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'save';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87570a5a3daa1d005874d2cacfe4d642(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="d-flex align-items-center" data-region="quick-grading-save">
            <div class="me-4">
                <input type="hidden" name="sendstudentnotifications" value="0" {{#sendstudentnotifications}}disabled{{/sendstudentnotifications}}>
                <input type="checkbox" id="send-student-notifications-{{uniqid}}" name="sendstudentnotifications" {{#sendstudentnotifications}}checked="checked"{{/sendstudentnotifications}}>
                <label for="send-student-notifications-{{uniqid}}" class="m-0">{{#str}} notifystudents, mod_assign {{/str}}</label>
            </div>
            <button type="submit" class="btn btn-primary">
                {{#str}}save{{/str}}
            </button>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="d-flex align-items-center" data-region="quick-grading-save">
';
                $buffer .= $indent . '            <div class="me-4">
';
                $buffer .= $indent . '                <input type="hidden" name="sendstudentnotifications" value="0" ';
                $value = $context->find('sendstudentnotifications');
                $buffer .= $this->sectionC87198b06c7ce18b3aeed72afb34afb9($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                <input type="checkbox" id="send-student-notifications-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" name="sendstudentnotifications" ';
                $value = $context->find('sendstudentnotifications');
                $buffer .= $this->sectionE6c044fe8710d3502dd5cb9686c32f3f($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                <label for="send-student-notifications-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="m-0">';
                $value = $context->find('str');
                $buffer .= $this->sectionD1e918c6c70c55c5df46542b790b2464($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <button type="submit" class="btn btn-primary">
';
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->section9afe7a63bce6e8211d1f3b6a736886f3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </button>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
