---
sidebar_position: 2   
title: desc
slug: /ace/desc
tags: [Table manipulation]
---

Sorts a column in descending order.

### Syntax

 ```yaml
desc(<column>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| column | any | The column to operate on. |

### Return values
Null


## Usage

Sorts orders by creation date in descending order (newest first).


```yaml
desc(orders.created_at)
```


### Related functions      
* [asc](/ace/asc)
* [order_by](/ace/order_by)
* [top_n](/ace/top_n)
