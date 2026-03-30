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

import mysql.connector # import knihovny pro práci s MySQL databází

print("Python Tutorial 18 - Práce s databází\n")

try:
    conn = mysql.connector.connect( # připojení k databázi
        host="localhost",
        user="root",
        password="",
        database="store"
    )

    if conn.is_connected(): # kontrola, zda je připojení úspěšné
        print("Připojeno k databázi\n")

except mysql.connector.Error as e: # zachycení chyby připojení a výpis chybové zprávy
    print(f"Chyba připojení: {e}")
    exit() # ukončení skriptu, pokud se připojení nezdařilo

 # vytvoření kurzoru pro provádění SQL dotazů, dictionary=True umožňuje přístup k výsledkům jako k slovníku
cursor = conn.cursor(dictionary=True)

sql_select = "SELECT * FROM warehouse;"
# provedení SQL dotazu, výsledky jsou nyní v kurzoru
cursor.execute(sql_select) 

# načtení všech výsledků do proměnné rows, každý řádek je slovník díky dictionary=True
rows = cursor.fetchall() 

# kontrola, zda byly načteny nějaké řádky, a výpis dat
if rows:
    print("Seznam skladů:\n")

    # iterace přes načtené řádky a výpis informací o každém skladu
    for row in rows:
        print(f"ID: {row['id']}")
        print(f"Jméno: {row['name']}")
        print(f"Ulice: {row['street']}")
        print(f"Město: {row['city']}")
        print(f"PSČ: {row['postal_code']}")
        print(f"Země: {row['country']}\n")

else:
    print("Žádná data v tabulce")

cursor.close() # uzavření kurzoru, uvolnění prostředků
conn.close() # uzavření připojení k databázi, uvolnění prostředků

print("Připojení uzavřeno")