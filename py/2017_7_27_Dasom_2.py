#-*- encoding:utf8 -*-
import requests
from bs4 import BeautifulSoup
import pymysql

if __name__ == "__main__":
    conn = pymysql.connect(host='localhost', user='root', password='autoset', db='db1', charset='utf8')
    cursor = conn.cursor()
    source_code = requests.get('http://www.naver.com')
    bs4 = BeautifulSoup(source_code.text, "html.parser")

    ranklist = bs4.find('ul', attrs={'data-list': '1to10'})
    ranktxt = ranklist.find_all('span')
    for i in range(0, 10):
        cursor.execute("INSERT INTO table2(idx, content) VALUES (%s, %s)",
                       (ranktxt[i * 4].get_text(), ranktxt[i * 4 + 1].get_text()))

    ranklist = bs4.find('ul',attrs={'data-list':'11to20'})
    ranktxt = ranklist.find_all('span')
    for i in range(0,10):
        cursor.execute("INSERT INTO table2(idx, content) VALUES (%s, %s)",
                       (ranktxt[i * 4].get_text(), ranktxt[i * 4 + 1].get_text()))
    conn.commit()