#include "mainwindow.h"
#include "ui_mainwindow.h"

MainWindow::MainWindow(QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::MainWindow)
{
    ui->setupUi(this);
    ui->tab->setAccessibleName("Chiffrement");
    ui->tab_2->setAccessibleName("Déchiffrement");
}

MainWindow::~MainWindow()
{
    delete ui;
}

void MainWindow::on_pushButton_2_clicked()
{
    ui->lineEdit->clear();
    ui->spinBox->clear();
    ui->lineEdit_3->clear();
}

void MainWindow::on_pushButton_4_clicked()
{
    ui->lineEdit_2->clear();
    ui->spinBox_2->clear();
    ui->lineEdit_4->clear();
}

void MainWindow::on_pushButton_clicked()
{
    QString texte = ui->lineEdit->text();
    int decalage  = ui->spinBox->text().toInt();
    QString messageChiffre = this->chiffrementCesar(texte , decalage);
    ui->lineEdit_3->setText(messageChiffre);
}
QString MainWindow::chiffrementCesar(const QString &message, int decalage)
{
    QString texteChiffre;
    for (const QChar &caractere : message)
    {
        if(caractere.isLetter())
        {
            QChar firstLetter = caractere.isLower() ? 'a' : 'A';
            texteChiffre += QChar((caractere.toLatin1() - firstLetter.toLatin1() + decalage + 26) % 26 + firstLetter.toLatin1());

        }else
        {
            texteChiffre+= caractere;
        }
    }
    return texteChiffre;
}

void MainWindow::on_pushButton_3_clicked()
{
    QString texte = ui->lineEdit_2->text();
    int decalage  = ui->spinBox_2->text().toInt();
    QString messageDechiffre = this->chiffrementCesar(texte , -decalage);
    ui->lineEdit_4->setText(messageDechiffre);
}
