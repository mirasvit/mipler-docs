---
sidebar_position: 2   
title: select_columns
slug: /ace/select_columns
tags: [Table manipulation]
---

Selects specific columns from a table.

### Syntax

 ```yaml
select_columns(<table>, <columns>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| table | Table | The table to operate on. |
| columns | Array | The Columns value. |

### Return values
Table


## Usage

Returns only the ID, total price, and status columns from the orders table.


```yaml
select_columns(orders, orders.id, orders.total_price, orders.status)
```


### Related functions      
* [as](/ace/as)
* [summarize_columns](/ace/summarize_columns)
* [combine](/ace/combine)
