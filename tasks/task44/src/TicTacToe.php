<?php

namespace App;

class TicTacToe
{
    // Игровое поле
    private $board;
    // Текущий игрок (X или O)
    private $currentPlayer;
    // Победитель игры (X, O) или null, если победителя нет
    private $winner;

    // Конструктор класса, инициализирует игровое поле и устанавливает текущего игрока
    public function __construct($level = 'easy')
    {
        // Создание игрового поля 3x3, заполненного null
        $this->board = array_fill(1, 3, array_fill(1, 3, null));
        // Установка текущего игрока на 'X'
        $this->currentPlayer = 'X';
        // Инициализация переменной для хранения победителя
        $this->winner = null;

        // Выбор стратегии в зависимости от уровня сложности
        $strategyLevel = 'App\\strategies\\' . ucfirst($level);
        $this->strategy = new $strategyLevel();
    }

    // Метод для осуществления хода игрока или ИИ
    // Возвращает true, если текущий ход победный, и false в противном случае
    public function go($row = null, $col = null)
    {
        // Проверка, является ли ход игроком
        if ($row !== null && $col !== null) {
            // Ход игрока
            $this->makeMove($row, $col);
        } else {
            // Ход ИИ
            $this->strategy->makeMove($this->board, $this->currentPlayer);
        }

        // Проверка наличия победителя после хода
        $this->winner = $this->checkWinner();

        // Переключение на следующего игрока
        $this->currentPlayer = $this->currentPlayer === 'X' ? 'O' : 'X';

        // Возвращаем true, если есть победитель, и false в противном случае
        return $this->winner !== null;
    }

    // Метод для осуществления хода игрока
    private function makeMove($row, $col)
    {
        // Проверка, что выбранная ячейка свободна
        if ($this->board[$row][$col] === null) {
            // Установка значения текущего игрока в выбранную ячейку
            $this->board[$row][$col] = $this->currentPlayer;
        }
    }

    // Метод для проверки наличия победителя после хода
    private function checkWinner()
    {
        // Проверка по строкам
        for ($i = 1; $i <= 3; $i++) {
            if ($this->board[$i][1] !== null &&
                $this->board[$i][1] === $this->board[$i][2] &&
                $this->board[$i][1] === $this->board[$i][3]) {
                return $this->board[$i][1];
            }
        }

        // Проверка по столбцам
        for ($j = 1; $j <= 3; $j++) {
            if ($this->board[1][$j] !== null &&
                $this->board[1][$j] === $this->board[2][$j] &&
                $this->board[1][$j] === $this->board[3][$j]) {
                return $this->board[1][$j];
            }
        }

        // Проверка по диагоналям
        if ($this->board[1][1] !== null &&
            $this->board[1][1] === $this->board[2][2] &&
            $this->board[1][1] === $this->board[3][3]) {
            return $this->board[1][1];
        }

        if ($this->board[1][3] !== null &&
            $this->board[1][3] === $this->board[2][2] &&
            $this->board[1][3] === $this->board[3][1]) {
            return $this->board[1][3];
        }

        // Возвращаем null, если нет победителя
        return null;
    }
}

