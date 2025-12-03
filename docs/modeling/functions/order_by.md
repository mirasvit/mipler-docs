---
sidebar_position: 2   
title: order_by
slug: /ace/order_by
tags: [Table manipulation]
---

Sorts a table by one or more columns in ascending or descending order.

### Syntax

 ```yaml
order_by(<table>, <columns>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| table | Table | The table to operate on. |
| columns | Array | The Columns value. |

### Return values
Table


## Usage

Sorts orders by creation date in descending order (newest first).


```yaml
order_by(orders, orders.created_at desc)
```


### Related functions      
* [asc](/ace/asc)
* [desc](/ace/desc)
* [top_n](/ace/top_n)
* [summarize_columns](/ace/summarize_columns)
