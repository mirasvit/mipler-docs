---
sidebar_position: 2   
title: pivot_index
slug: /ace/pivot_index
tags: [Table manipulation]
---

Creates a pivot table with indexed values.

### Syntax

 ```yaml
pivot_index(<dataTable>, <dataColumns>, <pivotColumns>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| dataTable | Table | The Datatable table. |
| dataColumns | Array | The Datacolumns value. |
| pivotColumns | Array | The Pivotcolumns value. |

### Return values
Table


## Usage

Creates a pivot table with order status as rows and total price as values.


```yaml
pivot_index(orders, orders.status, orders.total_price)
```


### Related functions      
* [summarize_columns](/ace/summarize_columns)
* [sum](/ace/sum)
* [count_x](/ace/count_x)
* [order_by](/ace/order_by)
