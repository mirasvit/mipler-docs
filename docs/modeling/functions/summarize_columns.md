---
sidebar_position: 2   
title: summarize_columns
slug: /ace/summarize_columns
tags: [Table manipulation]
---

Creates a summary table based on specified columns and optional filter expressions.

### Syntax

 ```yaml
summarize_columns(<columns>, <filters>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| columns | Array | An array of column names to group (dimensions) and summarize (measures). |
| filters | Array | An optional array of filter expressions to refine the result set. |

### Return values
Table


## Usage

Groups orders by customer ID and calculates the sum of total prices for each customer.


```yaml
summarize_columns(orders, orders.customer_id, sum(orders.total_price))
```


### Related functions      
* [sum](/ace/sum)
* [count_x](/ace/count_x)
* [average_x](/ace/average_x)
* [pivot_index](/ace/pivot_index)
* [order_by](/ace/order_by)
