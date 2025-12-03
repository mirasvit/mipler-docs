---
sidebar_position: 2   
title: selected_value
slug: /ace/selected_value
tags: [Filter]
---

Returns the selected value from the current filter context.

### Syntax

 ```yaml
selected_value(<column>, <defaultValue>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| column | any | The column to operate on. |
| defaultValue | any | The Defaultvalue value. |

### Return values
Depends on input arguments.


## Usage

Returns the selected order status from the current filter context.


```yaml
selected_value(orders.status)
```


### Related functions      
* [all_selected](/ace/all_selected)
* [filter](/ace/filter)
* [calculate](/ace/calculate)
