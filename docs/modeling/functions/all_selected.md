---
sidebar_position: 2   
title: all_selected
slug: /ace/all_selected
tags: [Filter]
---

Returns all selected values from the current context.

### Syntax

 ```yaml
all_selected(<table>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| table | Table | The table to operate on. |

### Return values
Table


## Usage

Returns all selected customer IDs from the current filter context.


```yaml
all_selected(orders.customer_id)
```


### Related functions      
* [all_row](/ace/all_row)
* [all](/ace/all)
* [selected_value](/ace/selected_value)
