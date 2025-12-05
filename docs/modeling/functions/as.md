---
sidebar_position: 2   
title: as
slug: /ace/as
tags: [Table manipulation]
---

Renames a column or expression with an alias.

### Syntax

 ```yaml
as(<value>, <name>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| value | any | The value to process. |
| name | Text | The name or identifier. |

### Return values
Depends on input arguments.


## Usage

Renames the sum of total prices to 'total' for better readability.


```yaml
as(sum(orders.total_price), 'total')
```


### Related functions      
* [select_columns](/ace/select_columns)
* [summarize_columns](/ace/summarize_columns)
