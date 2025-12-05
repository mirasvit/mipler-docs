---
sidebar_position: 2   
title: union
slug: /ace/union
tags: [Table manipulation]
---

Combines rows from multiple tables.

### Syntax

 ```yaml
union(<table1>, <table2>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| table1 | Table | The Table1 table. |
| table2 | Table | The Table2 table. |

### Return values
Table


## Usage

Combines rows from orders_2023 and orders_2024 tables.


```yaml
union(orders_2023, orders_2024)
```


### Related functions      
* [combine](/ace/combine)
* [left_join](/ace/left_join)
* [select_columns](/ace/select_columns)
