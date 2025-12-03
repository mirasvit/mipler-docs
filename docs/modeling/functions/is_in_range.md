---
sidebar_position: 2   
title: is_in_range
slug: /ace/is_in_range
tags: [Logical]
---

Checks if a value is within a specified range.

### Syntax

 ```yaml
is_in_range(<val>, <range>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| val | Date | The Val date value. |
| range | Array | The range of values. |

### Return values
Boolean


## Usage

Checks if order total price is between 10 and 100.


```yaml
is_in_range(orders.total_price, 10, 100)
```


### Related functions      
* [if](/ace/if)
* [case](/ace/case)
* [and](/ace/and)
* [or](/ace/or)
