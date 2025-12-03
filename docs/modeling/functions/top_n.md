---
sidebar_position: 2   
title: top_n
slug: /ace/top_n
tags: [Table manipulation]
---

Returns the top N rows based on a specified column.

### Syntax

 ```yaml
top_n(<table>, <limit>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| table | Table | The table to operate on. |
| limit | Integer | The maximum number of rows to return. |

### Return values
Table


## Usage

Returns the top 10 orders by total price in descending order.


```yaml
top_n(orders, 10, orders.total_price desc)
```


### Related functions      
* [order_by](/ace/order_by)
* [asc](/ace/asc)
* [desc](/ace/desc)
* [summarize_columns](/ace/summarize_columns)
