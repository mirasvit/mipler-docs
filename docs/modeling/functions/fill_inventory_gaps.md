---
sidebar_position: 2   
title: fill_inventory_gaps
slug: /ace/fill_inventory_gaps
tags: [Table manipulation]
---

Fills gaps in inventory data by generating missing date/product combinations.

### Syntax

 ```yaml
fill_inventory_gaps(<table>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| table | Table | The table to operate on. |

### Return values
Table


## Usage

Fills gaps in inventory data by generating missing date/product combinations.


```yaml
fill_inventory_gaps(inventory_levels, inventory_levels.date, inventory_levels.product_id)
```


### Related functions      
* [generate_series](/ace/generate_series)
* [date_range](/ace/date_range)
* [summarize_columns](/ace/summarize_columns)
