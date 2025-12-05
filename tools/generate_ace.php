<?php
$definition = json_decode(file_get_contents("./ace.json"), true);

usort($definition['functions'], function ($a, $b) {
    $scopeA = !empty($a['scope']) ? $a['scope'] : '';
    $scopeB = !empty($b['scope']) ? $b['scope'] : '';
    $scopeCompare = strcmp($scopeA, $scopeB);
    if ($scopeCompare !== 0) {
        return $scopeCompare;
    }
    // If scopes are equal, sort by name
    return strcmp(strtolower($a['name']), strtolower($b['name']));
});

foreach ($definition['functions'] as $function) {
    $fileName = strtolower($function['name']) . '.md';
    $slug     = '/ace/' . strtolower($function['name']);

    $content = "---
sidebar_position: 2   
title: {$function['name']}
slug: {$slug}
tags: [{$function['scope']}]
---

{$function['description']}

";


    $content .= "### Syntax\n";
    // Show only the first syntax variant
    $syntax = $function['syntax'][0];
    $content .= "
 ```yaml
{$syntax['syntax']}
```
    ";
    if (count($syntax['arguments']) > 0) {
        $content .= "
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
";
        $maxArgs = 6; // Limit displayed arguments for readability (show 3 condition/value pairs)
        $argsToShow = array_slice($syntax['arguments'], 0, $maxArgs);
        foreach ($argsToShow as $argument) {
            $content .= "| {$argument['name']} | {$argument['type']} | {$argument['description']} |\n";
        }
        if (count($syntax['arguments']) > $maxArgs) {
            $content .= "| ... | ... | Additional condition/value pairs can be added |\n";
        }
    }

    $content .= "
### Return values\n";
    $content .= $function['returnType'] . "\n\n";


    if (count($function['usages']) > 0) {
        $content .= "
## Usage
";
        foreach ($function['usages'] as $index => $usage) {
            // Add description if available
            if (!empty($function['usageDescriptions'][$index])) {
                $content .= "
{$function['usageDescriptions'][$index]}

";
            }
            $content .= "
```yaml
{$usage}
```

";
        }
    }

    if (count($function['examples']) > 0) {
        $content .= "
### Examples      
";
        foreach ($function['examples'] as $usage) {
            $content .= "
```yaml
{$usage}
```    
";
        }
    }

    if (count($function['relatedFunctions']) > 0) {
        $content .= "
### Related functions      
";
        foreach ($function['relatedFunctions'] as $fn) {
            $s       = '/ace/' . strtolower($fn);
            $content .= "* [{$fn}]({$s})\n";
        }
    }
    file_put_contents(dirname(__FILE__) . '/../docs/modeling/functions/' . $fileName, $content);
}


$fileName = 'index.md';
$content  = "---
sidebar_position: 2
title: Function List
---
";
$content  .= "
| Name        | Type | Description |
| ----------- | ---- | ----------- |     
";
foreach ($definition['functions'] as $function) {
    $link = '/ace/' . strtolower($function['name']);

    $content .= "| [{$function['name']}]({$link}) | {$function['scope']} | {$function['description']} |\n";
}

file_put_contents(dirname(__FILE__) . '/../docs/modeling/functions/' . $fileName, $content);