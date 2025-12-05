---
sidebar_position: 2   
title: not
slug: /ace/not
tags: [Logical]
---

Returns the logical opposite of a boolean value.

### Syntax

 ```yaml
not(<expr>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| expr | any | The expression to evaluate. |

### Return values
Boolean


## Usage

Returns true if the order is not cancelled.


```yaml
not(orders.cancelled)
```


### Related functions      
* [blank](/ace/blank)
* [is_blank](/ace/is_blank)
* [and](/ace/and)
* [or](/ace/or)
* [if](/ace/if)
* [case](/ace/case)
