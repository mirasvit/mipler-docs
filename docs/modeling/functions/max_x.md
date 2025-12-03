---
sidebar_position: 2   
title: max_x
slug: /ace/max_x
tags: [Aggregation]
---

Returns the maximum value in a column.

### Syntax

 ```yaml
max_x(<table>, <expr>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| table | Table | The table to operate on. |
| expr | any | The expression to evaluate. |

### Return values
Depends on input arguments.


## Usage

Returns the maximum order total price.


```yaml
max_x(orders.total_price)
```


### Related functions      
* [min_x](/ace/min_x)
* [sum](/ace/sum)
* [average_x](/ace/average_x)
* [count_x](/ace/count_x)
