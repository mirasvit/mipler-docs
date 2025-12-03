---
sidebar_position: 2   
title: in_array
slug: /ace/in_array
tags: [Logical]
---

Checks if a value exists in an array.

### Syntax

 ```yaml
in_array(<val>, <haystack>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| val | Text | The Val string value. |
| haystack | Array | The Haystack value. |

### Return values
Boolean


## Usage

Checks if order country is in the specified list of countries.


```yaml
in_array(orders.country, ['US', 'CA', 'UK'])
```


### Related functions      
* [if](/ace/if)
* [case](/ace/case)
* [str_contains](/ace/str_contains)
