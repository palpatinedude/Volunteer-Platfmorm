# Cooperative System for Disaster Relief Registration and Assistance

## 🌍 Project Overview

This system is designed to support disaster-affected communities by enabling coordinated efforts between citizens, rescuers, and a central base (warehouse). It facilitates seamless communication and logistics to manage item requests, donations, and distributions during emergencies like earthquakes, floods, or pandemics.

---

## 🚀 Key Features

### 👤 User Registration
- Citizens can register using their mobile numbers.
- Simple and secure login system.

### 🆘 Request Assistance
- Citizens can request essential items (e.g., food, water, medicine).
- Each request includes item details, quantity, location, and urgency.

### 🙌 Donate Surplus Items
- Citizens with extra resources can list them for donation.
- Donations can be picked up or dropped at the central warehouse.

### 📦 Central Warehouse (Base)
- Acts as a storage hub for incoming donations and outgoing deliveries.
- Can issue **broadcast announcements** for urgent item needs.

### 🚑 Mission Management for Rescuers
- Map-based dashboard to view requests and donation points.
- Rescuers can select missions, get optimized routes, and update statuses.

### 📣 Announcements & Notifications
- Real-time announcements from the base displayed on users’ phones.
- Notifications for donation requests matching citizen inventories.

---

## 🧠 🔄 New Feature: Real-Time Matching Algorithm

**Smart Prioritization & Matching System**

This new module automatically matches:
- **High-urgency** requests with **nearby donations** or **available warehouse stock**.
- **Rescuers** with **missions** based on location, urgency, and route efficiency.

🔍 *Example:*
If a citizen urgently needs clean water, the system prioritizes:
1. Nearest donor with water.
2. If none, nearest warehouse with stock.
3. Assigns the closest available rescuer.

**Benefits:**
- Faster response time for critical needs.
- Balanced load distribution among rescuers.
- Reduced travel and optimized resource usage.

---

## 🛠️ Technologies Used

### Frontend
- **HTML, CSS, JavaScript** – UI for citizens and rescuers.
- **Leaflet / Google Maps API** – Interactive maps for mission planning and item tracking.

### Backend
- **PHP** – Handles routing, APIs, authentication, and server-side logic.
- **MySQL** – Manages data related to users, items, missions, and warehouse stock.

---


