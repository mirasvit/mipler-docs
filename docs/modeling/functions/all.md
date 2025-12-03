---
sidebar_position: 2   
title: all
slug: /ace/all
tags: [Filter]
---

Removes all filters from the current context.

### Syntax

 ```yaml
all(<table>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| table | Table | The table to operate on. |

### Return values
Table


## Usage

Calculates the sum of all order prices, ignoring any applied filters.


```yaml
all(sum(orders.total_price))
```


### Related functions      
* [all_row](/ace/all_row)
* [all_selected](/ace/all_selected)
* [keep_filters](/ace/keep_filters)
* [calculate](/ace/calculate)
