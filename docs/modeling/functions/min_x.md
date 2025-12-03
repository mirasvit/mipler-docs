---
sidebar_position: 2   
title: min_x
slug: /ace/min_x
tags: [Aggregation]
---

Returns the minimum value in a column.

### Syntax

 ```yaml
min_x(<table>, <expr>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| table | Table | The table to operate on. |
| expr | any | The expression to evaluate. |

### Return values
Depends on input arguments.


## Usage

Returns the minimum order total price.


```yaml
min_x(orders.total_price)
```


### Related functions      
* [max_x](/ace/max_x)
* [sum](/ace/sum)
* [average_x](/ace/average_x)
* [count_x](/ace/count_x)
