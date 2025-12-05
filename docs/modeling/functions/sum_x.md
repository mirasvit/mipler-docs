---
sidebar_position: 2   
title: sum_x
slug: /ace/sum_x
tags: [Aggregation]
---

Calculates the sum of values in a column.

### Syntax

 ```yaml
sum_x(<table>, <expr>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| table | Table | The table to operate on. |
| expr | any | The expression to evaluate. |

### Return values
Depends on input arguments.


## Usage

Calculates the sum of order total prices.


```yaml
sum_x(orders.total_price)
```


### Related functions      
* [count_x](/ace/count_x)
* [sum](/ace/sum)
* [average_x](/ace/average_x)
* [max_x](/ace/max_x)
* [min_x](/ace/min_x)
