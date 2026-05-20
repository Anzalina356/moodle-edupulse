<?php

class __Mustache_84a87bcdc701c74eeff221d807055f92 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid tertiary-navigation full-width-bottom-border mb-2">
';
        $buffer .= $indent . '    <div class="d-flex">
';
        $buffer .= $indent . '        <div class="navitem">
';
        $buffer .= $indent . '            <h2>';
        $value = $context->find('str');
        $buffer .= $this->section7f3ff8af8ffffd048cac8517cf997299($context, $indent, $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="navitem-divider d-none d-sm-flex"></div>
';
        $value = $context->find('userselector');
        $buffer .= $this->section37a00fe417c256fc236bfd1704a3f27f($context, $indent, $value);
        $value = $context->find('groupselector');
        $buffer .= $this->section37a00fe417c256fc236bfd1704a3f27f($context, $indent, $value);
        $value = $context->find('initialselector');
        $buffer .= $this->section18d5b6759bf0791c2e30c43267aa9338($context, $indent, $value);
        $value = $context->find('statusselector');
        $buffer .= $this->section737a849d82d0674c9f6956c0d842544c($context, $indent, $value);
        $value = $context->find('extrafiltersdropdown');
        $buffer .= $this->section8bb7f9a61ff463678de875ec96ec989a($context, $indent, $value);
        $value = $context->find('pagereset');
        $buffer .= $this->section9e3d6f95cf33c60d18458833af9997b5($context, $indent, $value);
        $value = $context->find('graderurl');
        $buffer .= $this->section572737d82ac1220547df2c8df8f7f413($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="container-fluid tertiary-navigation pt-0">
';
        $buffer .= $indent . '    <div class="d-flex flex-wrap gap-2 pb-2">
';
        $value = $context->find('quickgrading');
        $buffer .= $this->sectionC8ba47f31ef6c61c8b5dcb142247e910($context, $indent, $value);
        $value = $context->find('downloadasfolders');
        $buffer .= $this->section9c6cf5bbaa682a58ae3a4ce0aba43209($context, $indent, $value);
        $value = $context->find('actions');
        $buffer .= $this->section30141a513ac0a62f763946690eb36bf6($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section7f3ff8af8ffffd048cac8517cf997299(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'gradeitem:submissions, mod_assign';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'gradeitem:submissions, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section37a00fe417c256fc236bfd1704a3f27f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
                {{>core/comboboxsearch}}
            </div>
            <div class="navitem-divider d-none d-sm-flex"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/comboboxsearch')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider d-none d-sm-flex"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section18d5b6759bf0791c2e30c43267aa9338(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem d-flex flex-column align-self-center">
                {{>core/comboboxsearch}}
            </div>
            <div class="navitem-divider"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem d-flex flex-column align-self-center">
';
                if ($partial = $this->mustache->loadPartial('core/comboboxsearch')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6eb9fdab40d81993f878bb418475209(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                document.querySelector(\'#{{baseid}}\').addEventListener(\'change\', function(e) {
                    window.location.href = e.target.value;
                });
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                document.querySelector(\'#';
                $value = $this->resolveValue($context->find('baseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\').addEventListener(\'change\', function(e) {
';
                $buffer .= $indent . '                    window.location.href = e.target.value;
';
                $buffer .= $indent . '                });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section737a849d82d0674c9f6956c0d842544c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
                {{>core/select_menu}}
            </div>
            <div class="navitem-divider d-none d-sm-flex"></div>
            {{#js}}
                document.querySelector(\'#{{baseid}}\').addEventListener(\'change\', function(e) {
                    window.location.href = e.target.value;
                });
            {{/js}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/select_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider d-none d-sm-flex"></div>
';
                $value = $context->find('js');
                $buffer .= $this->sectionF6eb9fdab40d81993f878bb418475209($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8bb7f9a61ff463678de875ec96ec989a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
            {{>core/local/dropdown/dialog}}
            </div>
            <div class="navitem-divider d-none d-sm-flex"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/local/dropdown/dialog')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider d-none d-sm-flex"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA443c44aa5aaf5ce9a756c81f3cfdc11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clearall, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'clearall, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e3d6f95cf33c60d18458833af9997b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem align-self-center">
                <a href="{{{.}}}" class="btn btn-link">{{#str}}clearall, core{{/str}}</a>
            </div>
            <div class="navitem-divider"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem align-self-center">
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="btn btn-link">';
                $value = $context->find('str');
                $buffer .= $this->sectionA443c44aa5aaf5ce9a756c81f3cfdc11($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56ca90260d0df5e2c7f6eff1f217ee41(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'gradeverb, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'gradeverb, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section572737d82ac1220547df2c8df8f7f413(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="navitem ms-sm-auto align-self-center">
            <a class="btn btn-primary" href="{{graderurl}}">{{#str}}gradeverb, core{{/str}}</a>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="navitem ms-sm-auto align-self-center">
';
                $buffer .= $indent . '            <a class="btn btn-primary" href="';
                $value = $this->resolveValue($context->find('graderurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section56ca90260d0df5e2c7f6eff1f217ee41($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '        </div>
';
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

    private function sectionEf00881490625e9ddf38b11859c124df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'quickgrading, mod_assign';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'quickgrading, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB52116d4d4a24345bf5841c64fcc275c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                document.querySelector(\'#quickgrading-{{uniqid}}\').addEventListener(\'change\', function(e) {
                    var url = new URL(\'{{{baseurl}}}\');
                    url.searchParams.set(\'quickgrading\', e.target.checked ? 1 : 0);
                    window.location.href = url;
                });
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                document.querySelector(\'#quickgrading-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\').addEventListener(\'change\', function(e) {
';
                $buffer .= $indent . '                    var url = new URL(\'';
                $value = $this->resolveValue($context->find('baseurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '\');
';
                $buffer .= $indent . '                    url.searchParams.set(\'quickgrading\', e.target.checked ? 1 : 0);
';
                $buffer .= $indent . '                    window.location.href = url;
';
                $buffer .= $indent . '                });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC8ba47f31ef6c61c8b5dcb142247e910(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem m-0 ms-auto">
                <div class="form-check align-self-center">
                    <input class="form-check-input" type="checkbox" id="quickgrading-{{uniqid}}" {{#enabled}}checked{{/enabled}}/>
                    <label class="form-check-label" for="quickgrading-{{uniqid}}" >{{#str}}quickgrading, mod_assign{{/str}}</label>
                </div>
            </div>
            <div class="navitem-divider m-0"></div>
            {{#js}}
                document.querySelector(\'#quickgrading-{{uniqid}}\').addEventListener(\'change\', function(e) {
                    var url = new URL(\'{{{baseurl}}}\');
                    url.searchParams.set(\'quickgrading\', e.target.checked ? 1 : 0);
                    window.location.href = url;
                });
            {{/js}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem m-0 ms-auto">
';
                $buffer .= $indent . '                <div class="form-check align-self-center">
';
                $buffer .= $indent . '                    <input class="form-check-input" type="checkbox" id="quickgrading-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('enabled');
                $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
                $buffer .= '/>
';
                $buffer .= $indent . '                    <label class="form-check-label" for="quickgrading-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" >';
                $value = $context->find('str');
                $buffer .= $this->sectionEf00881490625e9ddf38b11859c124df($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider m-0"></div>
';
                $value = $context->find('js');
                $buffer .= $this->sectionB52116d4d4a24345bf5841c64fcc275c($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d6d83e357b4f42b364a45a51a5ba60d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'downloadasfolders, mod_assign';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'downloadasfolders, mod_assign';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section48923172abe8e7475d7119c2dad9bd00(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                document.querySelector(\'#downloadasfolders-{{uniqid}}\').addEventListener(\'change\', function(e) {
                    var url = new URL(\'{{{baseurl}}}\');
                    url.searchParams.set(\'downloadasfolders\', e.target.checked ? 1 : 0);
                    window.location.href = url;
                });
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                document.querySelector(\'#downloadasfolders-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\').addEventListener(\'change\', function(e) {
';
                $buffer .= $indent . '                    var url = new URL(\'';
                $value = $this->resolveValue($context->find('baseurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '\');
';
                $buffer .= $indent . '                    url.searchParams.set(\'downloadasfolders\', e.target.checked ? 1 : 0);
';
                $buffer .= $indent . '                    window.location.href = url;
';
                $buffer .= $indent . '                });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c6cf5bbaa682a58ae3a4ce0aba43209(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem m-0">
                <div class="form-check align-self-center">
                    <input class="form-check-input" type="checkbox" id="downloadasfolders-{{uniqid}}" {{#enabled}}checked{{/enabled}}/>
                    <label class="form-check-label" for="downloadasfolders-{{uniqid}}">{{#str}}downloadasfolders, mod_assign{{/str}}</label>
                </div>
            </div>
            <div class="navitem-divider m-0"></div>
            {{#js}}
                document.querySelector(\'#downloadasfolders-{{uniqid}}\').addEventListener(\'change\', function(e) {
                    var url = new URL(\'{{{baseurl}}}\');
                    url.searchParams.set(\'downloadasfolders\', e.target.checked ? 1 : 0);
                    window.location.href = url;
                });
            {{/js}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem m-0">
';
                $buffer .= $indent . '                <div class="form-check align-self-center">
';
                $buffer .= $indent . '                    <input class="form-check-input" type="checkbox" id="downloadasfolders-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('enabled');
                $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
                $buffer .= '/>
';
                $buffer .= $indent . '                    <label class="form-check-label" for="downloadasfolders-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section6d6d83e357b4f42b364a45a51a5ba60d($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider m-0"></div>
';
                $value = $context->find('js');
                $buffer .= $this->section48923172abe8e7475d7119c2dad9bd00($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30141a513ac0a62f763946690eb36bf6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem m-0">{{{actions}}}</div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem m-0">';
                $value = $this->resolveValue($context->find('actions'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
