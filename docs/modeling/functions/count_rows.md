---
sidebar_position: 2   
title: count_rows
slug: /ace/count_rows
tags: [Aggregation]
---

Returns the number of rows in a table.

### Syntax

 ```yaml
count_rows(<table>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| table | Table | The table to operate on. |

### Return values
Integer


## Usage

Returns the total number of orders.


```yaml
count_rows(orders)
```


### Related functions      
* [count_x](/ace/count_x)
* [sum](/ace/sum)
* [average_x](/ace/average_x)
