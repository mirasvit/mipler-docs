---
sidebar_position: 2   
title: combine
slug: /ace/combine
tags: [Table manipulation]
---

Combines multiple tables into a single table.

### Syntax

 ```yaml
combine(<table>, <by>, <columns>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| table | Table | The table to operate on. |
| by | any | The By value. |
| columns | Array | The Columns value. |

### Return values
Table


## Usage

Combines orders from 2023 and 2024 into a single table.


```yaml
combine(orders_2023, orders_2024)
```


### Related functions      
* [union](/ace/union)
* [left_join](/ace/left_join)
* [select_columns](/ace/select_columns)
