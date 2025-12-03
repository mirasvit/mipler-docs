---
sidebar_position: 2   
title: asc
slug: /ace/asc
tags: [Table manipulation]
---

Sorts a column in ascending order.

### Syntax

 ```yaml
asc(<column>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| column | any | The column to operate on. |

### Return values
Null


## Usage

Sorts orders by creation date in ascending order (oldest first).


```yaml
asc(orders.created_at)
```


### Related functions      
* [desc](/ace/desc)
* [order_by](/ace/order_by)
* [top_n](/ace/top_n)
