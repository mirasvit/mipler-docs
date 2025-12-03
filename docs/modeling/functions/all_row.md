---
sidebar_position: 2   
title: all_row
slug: /ace/all_row
tags: [Filter]
---

Returns all rows from the current context without filtering.

### Syntax

 ```yaml
all_row(<table>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| table | Table | The table to operate on. |

### Return values
Table


## Usage

Calculates the sum for all rows without filtering.


```yaml
all_row(sum(orders.total_price))
```


### Related functions      
* [all](/ace/all)
* [all_selected](/ace/all_selected)
* [keep_filters](/ace/keep_filters)
