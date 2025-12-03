---
sidebar_position: 2   
title: str_split
slug: /ace/str_split
tags: [Text]
---

Splits a string into an array based on a delimiter.

### Syntax

 ```yaml
str_split(<expr>, <delimiter>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| expr | Text | The expression to evaluate. |
| delimiter | Text | The Delimiter string value. |

### Return values
Array


## Usage

Splits order tags into an array using comma as delimiter.


```yaml
str_split(orders.tags, ',')
```


### Related functions      
* [str_contains](/ace/str_contains)
* [str_replace](/ace/str_replace)
* [concatenate_x](/ace/concatenate_x)
* [json_array_elements](/ace/json_array_elements)
