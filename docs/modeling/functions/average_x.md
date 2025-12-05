---
sidebar_position: 2   
title: average_x
slug: /ace/average_x
tags: [Aggregation]
---

Calculates the average of values in a column.

### Syntax

 ```yaml
average_x(<table>, <expr>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| table | Table | The table to operate on. |
| expr | any | The expression to evaluate. |

### Return values
Number


## Usage

Calculates the average of order total prices.


```yaml
average_x(orders.total_price)
```


### Related functions      
* [count_x](/ace/count_x)
* [sum_x](/ace/sum_x)
* [sum](/ace/sum)
* [max_x](/ace/max_x)
* [min_x](/ace/min_x)
