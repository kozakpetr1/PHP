"""
===========================================
PYTHON TUTORIAL 18
Databases
===========================================

pip install mysql-connector-python

- připojení k databázi
- SELECT dotaz
- výpis výsledků
"""

import mysql.connector

print("Python Tutorial 18 - Práce s databází\n")

try:
    conn = mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="store"
    )

    if conn.is_connected():
        print("Připojeno k databázi\n")

except mysql.connector.Error as e:
    print(f"Chyba připojení: {e}")
    exit()

cursor = conn.cursor(dictionary=True)

sql_select = "SELECT * FROM warehouse;"
cursor.execute(sql_select)

rows = cursor.fetchall()

if rows:
    print("Seznam skladů:\n")

    for row in rows:
        print(f"ID: {row['id']}")
        print(f"Jméno: {row['name']}")
        print(f"Ulice: {row['street']}")
        print(f"Město: {row['city']}")
        print(f"PSČ: {row['postal_code']}")
        print(f"Země: {row['country']}\n")

else:
    print("Žádná data v tabulce")

cursor.close()
conn.close()

print("Připojení uzavřeno")