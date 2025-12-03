---
sidebar_position: 2   
title: and
slug: /ace/and
tags: [Logical]
---

The AND function returns true if all of the provided arguments are logically true, and false if any of the provided arguments are logically false.

### Syntax

 ```yaml
and(<val1>, <val2>, <val3>, <val4>, <val5>, <val6>, ...)
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

Checks if order is both paid and fulfilled.


```yaml
and(orders.financial_status = 'paid', orders.fulfillment_status = 'fulfilled')
```


### Related functions      
* [or](/ace/or)
* [not](/ace/not)
* [if](/ace/if)
* [case](/ace/case)
