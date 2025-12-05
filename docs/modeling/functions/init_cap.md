---
sidebar_position: 2   
title: init_cap
slug: /ace/init_cap
tags: [Text]
---

Capitalizes the first letter of each word in a string.

### Syntax

 ```yaml
init_cap(<text>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| text | Text | The text value to process. |

### Return values
Text


## Usage

Capitalizes the first letter of each word in the customer name.


```yaml
init_cap(orders.customer_name)
```


### Related functions      
* [upper](/ace/upper)
* [lower](/ace/lower)
* [str_replace](/ace/str_replace)
