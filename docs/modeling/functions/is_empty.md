---
sidebar_position: 2   
title: is_empty
slug: /ace/is_empty
tags: [Logical]
---

Checks if a value is empty (null or empty string).

### Syntax

 ```yaml
is_empty(<expr>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| expr | any | The expression to evaluate. |

### Return values
Boolean


## Usage

Checks if order notes field is empty.


```yaml
is_empty(orders.notes)
```


### Related functions      
* [not](/ace/not)
* [blank](/ace/blank)
* [is_blank](/ace/is_blank)
* [if](/ace/if)
* [case](/ace/case)
