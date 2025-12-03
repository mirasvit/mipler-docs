---
sidebar_position: 2   
title: or
slug: /ace/or
tags: [Logical]
---

The OR function returns true if any of the provided arguments are logically true, and false if all of the provided arguments are logically false.

### Syntax

 ```yaml
or(<val1>, <val2>, <val3>, <val4>, <val5>, <val6>, ...)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| val1 | Boolean | The Val1 boolean value. |
| val2 | Boolean | The Val2 boolean value. |
| val3 | Boolean |  |
| val4 | Boolean |  |
| val5 | Boolean |  |
| val6 | Boolean |  |

### Return values
Boolean


## Usage

Checks if order status is either 'paid' or 'pending'.


```yaml
or(orders.financial_status = 'paid', orders.financial_status = 'pending')
```


### Related functions      
* [and](/ace/and)
* [not](/ace/not)
* [if](/ace/if)
* [case](/ace/case)
