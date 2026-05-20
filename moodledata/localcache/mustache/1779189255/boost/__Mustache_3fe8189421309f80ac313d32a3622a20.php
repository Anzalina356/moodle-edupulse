<?php

class __Mustache_3fe8189421309f80ac313d32a3622a20 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="flex-column h-100 w-100 p-1">
';
        $buffer .= $indent . '    <form action="';
        $value = $this->resolveValue($context->find('actionurl'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" method="GET">
';
        $buffer .= $indent . '        <input type="hidden" name="id" value="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        <input type="hidden" name="action" value="';
        $value = $this->resolveValue($context->find('action'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->find('filters');
        $buffer .= $this->section1007721355080d701272d68d5cad1c0a($context, $indent, $value);
        $buffer .= $indent . '        <div class="d-flex flex-row justify-content-end align-items-center pt-2">
';
        $buffer .= $indent . '            <a href="#" class="pull-right mx-3 text-decoration-none text-dark" data-action="close">';
        $value = $context->find('str');
        $buffer .= $this->section7a20f6a0c1e5f01649c33230170638b5($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '            <input class="btn btn-primary pull-right" type="submit" value="';
        $value = $context->find('str');
        $buffer .= $this->section159ef5f499ad5b15006bc945512a34ca($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionF2234bf3598c05a36f1c41fc94e115c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'markingstate, mod_assign';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'markingstate, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC877874b20aed109ed5be9bdc0ef9c49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected="selected"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selected="selected"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87bbcced7d3b325331e41b9af7225b87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <option value="{{key}}" {{#active}}selected="selected"{{/active}}>{{name}}</option>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <option value="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('active');
                $buffer .= $this->sectionC877874b20aed109ed5be9bdc0ef9c49($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f6f965f14aa6d69ab494d69b0c843d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="d-flex flex-wrap gap-2 m-0 pb-3">
                    <label class="w-100" for="filter-workflow-{{uniqid}}">
                        {{#str}}markingstate, mod_assign{{/str}}
                    </label>
                    <select name="workflowfilter" id="filter-workflow-{{uniqid}}" class="form-select w-100">
                    {{#workflowfilteroptions}}
                        <option value="{{key}}" {{#active}}selected="selected"{{/active}}>{{name}}</option>
                    {{/workflowfilteroptions}}
                    </select>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="d-flex flex-wrap gap-2 m-0 pb-3">
';
                $buffer .= $indent . '                    <label class="w-100" for="filter-workflow-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->sectionF2234bf3598c05a36f1c41fc94e115c7($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </label>
';
                $buffer .= $indent . '                    <select name="workflowfilter" id="filter-workflow-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="form-select w-100">
';
                $value = $context->find('workflowfilteroptions');
                $buffer .= $this->section87bbcced7d3b325331e41b9af7225b87($context, $indent, $value);
                $buffer .= $indent . '                    </select>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section28f71b27851faca900ff201a06b2849b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'marker, mod_assign';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'marker, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC7ac4e085d3ceef0a24b3b5c902f172f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="d-flex flex-wrap gap-2 m-0 pb-3">
                    <label class="w-100" for="filter-marking-allocation-{{uniqid}}">
                        {{#str}}marker, mod_assign{{/str}}
                    </label>
                    <select name="markingallocationfilter" id="filter-marking-allocation-{{uniqid}}" class="form-select w-100">
                    {{#markingallocationoptions}}
                        <option value="{{key}}" {{#active}}selected="selected"{{/active}}>{{name}}</option>
                    {{/markingallocationoptions}}
                    </select>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="d-flex flex-wrap gap-2 m-0 pb-3">
';
                $buffer .= $indent . '                    <label class="w-100" for="filter-marking-allocation-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->section28f71b27851faca900ff201a06b2849b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </label>
';
                $buffer .= $indent . '                    <select name="markingallocationfilter" id="filter-marking-allocation-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="form-select w-100">
';
                $value = $context->find('markingallocationoptions');
                $buffer .= $this->section87bbcced7d3b325331e41b9af7225b87($context, $indent, $value);
                $buffer .= $indent . '                    </select>
';
                $buffer .= $indent . '                </div>
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

    private function section51d7c9c652ced0161cb587bacd669266(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section703140f7961c97ce6202b725c3bad562(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' includesuspendedparticipants, mod_assign ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' includesuspendedparticipants, mod_assign ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF62776e37e214a03de42aadc39ced882(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="d-flex flex-wrap gap-2 m-0 pb-3 pt-2 mx-1 align-items-center">
                    <input type="hidden" name="suspendedparticipantsfilter" value="0" {{#active}}disabled{{/active}}>
                    <input type="checkbox" id="filter-suspended-participants-{{uniqid}}" name="suspendedparticipantsfilter" value="1" {{#active}}checked{{/active}}>
                    <label for="filter-suspended-participants-{{uniqid}}" class=\'m-0\' >{{#str}} includesuspendedparticipants, mod_assign {{/str}}</label>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="d-flex flex-wrap gap-2 m-0 pb-3 pt-2 mx-1 align-items-center">
';
                $buffer .= $indent . '                    <input type="hidden" name="suspendedparticipantsfilter" value="0" ';
                $value = $context->find('active');
                $buffer .= $this->sectionC87198b06c7ce18b3aeed72afb34afb9($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                    <input type="checkbox" id="filter-suspended-participants-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" name="suspendedparticipantsfilter" value="1" ';
                $value = $context->find('active');
                $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                    <label for="filter-suspended-participants-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class=\'m-0\' >';
                $value = $context->find('str');
                $buffer .= $this->section703140f7961c97ce6202b725c3bad562($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1007721355080d701272d68d5cad1c0a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#markingworkflow}}
                <div class="d-flex flex-wrap gap-2 m-0 pb-3">
                    <label class="w-100" for="filter-workflow-{{uniqid}}">
                        {{#str}}markingstate, mod_assign{{/str}}
                    </label>
                    <select name="workflowfilter" id="filter-workflow-{{uniqid}}" class="form-select w-100">
                    {{#workflowfilteroptions}}
                        <option value="{{key}}" {{#active}}selected="selected"{{/active}}>{{name}}</option>
                    {{/workflowfilteroptions}}
                    </select>
                </div>
            {{/markingworkflow}}
            {{#markingallocation}}
                <div class="d-flex flex-wrap gap-2 m-0 pb-3">
                    <label class="w-100" for="filter-marking-allocation-{{uniqid}}">
                        {{#str}}marker, mod_assign{{/str}}
                    </label>
                    <select name="markingallocationfilter" id="filter-marking-allocation-{{uniqid}}" class="form-select w-100">
                    {{#markingallocationoptions}}
                        <option value="{{key}}" {{#active}}selected="selected"{{/active}}>{{name}}</option>
                    {{/markingallocationoptions}}
                    </select>
                </div>
            {{/markingallocation}}
            {{#suspendedparticipants}}
                <div class="d-flex flex-wrap gap-2 m-0 pb-3 pt-2 mx-1 align-items-center">
                    <input type="hidden" name="suspendedparticipantsfilter" value="0" {{#active}}disabled{{/active}}>
                    <input type="checkbox" id="filter-suspended-participants-{{uniqid}}" name="suspendedparticipantsfilter" value="1" {{#active}}checked{{/active}}>
                    <label for="filter-suspended-participants-{{uniqid}}" class=\'m-0\' >{{#str}} includesuspendedparticipants, mod_assign {{/str}}</label>
                </div>
            {{/suspendedparticipants}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('markingworkflow');
                $buffer .= $this->section2f6f965f14aa6d69ab494d69b0c843d8($context, $indent, $value);
                $value = $context->find('markingallocation');
                $buffer .= $this->sectionC7ac4e085d3ceef0a24b3b5c902f172f($context, $indent, $value);
                $value = $context->find('suspendedparticipants');
                $buffer .= $this->sectionF62776e37e214a03de42aadc39ced882($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7a20f6a0c1e5f01649c33230170638b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'closebuttontitle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'closebuttontitle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section159ef5f499ad5b15006bc945512a34ca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'apply';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'apply';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
