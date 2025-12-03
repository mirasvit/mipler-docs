---
sidebar_position: 2   
title: is_blank
slug: /ace/is_blank
tags: [Logical]
---

Checks if a value is blank (null, empty string, or whitespace).

### Syntax

 ```yaml
is_blank(<expr>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| expr | any | The expression to evaluate. |

### Return values
Boolean


## Usage

Checks if order notes field is blank.


```yaml
is_blank(orders.notes)
```


### Related functions      
* [not](/ace/not)
* [blank](/ace/blank)
* [is_empty](/ace/is_empty)
* [if](/ace/if)
* [case](/ace/case)
