---
sidebar_position: 2   
title: int
slug: /ace/int
tags: [Math]
---

Converts a value to an integer number.

### Syntax

 ```yaml
int(<expr>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| expr | any | The expression to evaluate. |

### Return values
Integer


## Usage

Converts order total price to an integer for numeric calculations.


```yaml
int(orders.total_price)
```


### Related functions      
* [ceiling](/ace/ceiling)
* [convert](/ace/convert)
* [abs](/ace/abs)
