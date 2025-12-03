---
sidebar_position: 2   
title: country_name
slug: /ace/country_name
tags: [Geo]
---

Returns US Country Name

### Syntax

 ```yaml
country_name(<state>, <city>)
```
    
| Parameter   | Type | Description |
| ----------- | ---- | ----------- |     
| state | Text | The State string value. |
| city | Text | The City string value. |

### Return values
Text


## Usage

Converts country code to full country name.


```yaml
country_name("Arizona", "Phoenix")
```


Converts country code to full country name.


```yaml
country_name("FL", "Tampa")
```


### Related functions      
* [format](/ace/format)
* [str_replace](/ace/str_replace)
* [convert](/ace/convert)
