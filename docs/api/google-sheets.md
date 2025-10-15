---
sidebar_position: 4
title: Google Sheets Integration
sidebar_label: Google Sheets Integration
slug: /api/google-sheets
---


Google Sheets is one of the most popular ways to visualize and work with your data — and Mipler makes it effortless.

With the **Google Sheets integration**, you can connect any report directly to a spreadsheet and have it automatically refresh with the most up-to-date data.

---

## How it works

1. Open any report in Mipler.
1. Click **More Actions → Insert To Google Sheet**.
1. Copy the generated link code.
1. In your Google Sheet, paste this code.
      ```
      =IMPORTDATA("https://app.mipler.com/{SECRET}/sheet/{BASE64_PAYLOAD}")
      ```
1. Your data will automatically load into the sheet.

---

## Why it’s great

* 🔄 **Auto-refreshing data** — Sheets pulls live data from Mipler every hour.
* 📊 **Perfect for dashboards** — Create your own KPI boards, charts, and team overviews.
* 🧠 **No coding required** — Just copy and paste a link.
* 💪 **Fully compatible** — Works with Sheets formulas, queries, and visualization tools.

---

## Learn more

👉 Read the full guide on setting up Mipler + Google Sheets here: [https://mipler.com/google-sheets/](https://mipler.com/google-sheets/)
