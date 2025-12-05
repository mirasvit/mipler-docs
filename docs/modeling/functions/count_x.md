---
sidebar_position: 2   
title: count_x
slug: /ace/count_x
tags: [Aggregation]
---

Counts the number of non-null values in a column.

### Syntax

 ```yaml
count_x(<table>, <expr>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| table | Table | The table to operate on. |
| expr | any | The expression to evaluate. |

### Return values
Integer


## Usage

Counts the number of non-null customer IDs.


```yaml
count_x(orders.customer_id)
```


### Related functions      
* [sum](/ace/sum)
* [sum_x](/ace/sum_x)
* [average_x](/ace/average_x)
* [count_rows](/ace/count_rows)
