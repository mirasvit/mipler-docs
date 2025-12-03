---
sidebar_position: 2   
title: convert
slug: /ace/convert
tags: [Math]
---

Convert an expression to the specified data type.

### Syntax

 ```yaml
convert(<expr>, <dataType>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| expr | any | An expression which needs to be converted. |
| dataType | Text | An enumeration that includes: INT, FLOAT, STRING, BOOL, TIMESTAMP. |

### Return values
Depends on input arguments.


## Usage

Converts order number from string to integer for numeric operations.


```yaml
convert(orders.order_number, INT)
```


### Related functions      
* [int](/ace/int)
* [abs](/ace/abs)
* [format](/ace/format)
