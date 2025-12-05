---
sidebar_position: 2   
title: sum
slug: /ace/sum
tags: [Aggregation]
---

Returns the sum of all values in a column.

### Syntax

 ```yaml
sum(<expr>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| expr | any | The expression to evaluate. |

### Return values
Depends on input arguments.


## Usage

Calculates the sum of all order total prices.


```yaml
sum(orders.total_price)
```


### Related functions      
* [sum_x](/ace/sum_x)
* [average_x](/ace/average_x)
* [count_x](/ace/count_x)
* [max_x](/ace/max_x)
* [min_x](/ace/min_x)
