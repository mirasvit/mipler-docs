---
sidebar_position: 2   
title: over
slug: /ace/over
tags: [Window]
---

Applies a window function over a partition of rows.

### Syntax

 ```yaml
over(<expr>, <partitions>, <sorts>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| expr | any | The expression to evaluate. |
| partitions | Array | The Partitions value. |
| sorts | Array | The Sorts value. |

### Return values
Depends on input arguments.


## Usage

Calculates the sum of total prices partitioned by customer ID, sorted by creation date.


```yaml
over(sum(orders.total_price), partitions: [orders.customer_id], sorts: [orders.created_at asc])
```


### Related functions      
* [row_number](/ace/row_number)
* [sum](/ace/sum)
* [count_x](/ace/count_x)
* [average_x](/ace/average_x)
* [order_by](/ace/order_by)
