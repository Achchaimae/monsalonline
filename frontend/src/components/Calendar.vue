<template>
    <div class="container px-6 mx-auto m-6 ">
      <div class="flex justify-between items-center mb-4">
        <button @click="prevMonth" class="bg-blue-300 px-4 py-2 rounded">Prev</button>
        <h2 class="text-2xl font-bold">{{ currentMonth }} {{ currentYear }}</h2>
        <button @click="nextMonth" class="bg-blue-300 px-4 py-2 rounded">Next</button>
      </div>
      <table class="w-full text-left table-collapse h-96 rounded-lg bg-gray-200 drop-shadow">
        <thead>
          <tr class="text-sm font-medium uppercase tracking-wide bg text-gray-700 text-center">
            <th class="py-2">Sun</th>
            <th class="py-2">Mon</th>
            <th class="py-2">Tue</th>
            <th class="py-2">Wed</th>
            <th class="py-2">Thu</th>
            <th class="py-2">Fri</th>
            <th class="py-2">Sat</th>
          </tr>
        </thead>
        <tbody class="text-center rounded">
          <tr v-for="(week, index) in calendar" :key="index">
            <td  onclick="document.location.href='/appointment'" 
              v-for="day in week" :key="day.date" class="border p-2"
              :class="{ 'bg-gray-300': !day.inMonth, 'bg-blue-500 text-white': day.selected }"
              @click="selectDate(day)">
              {{ day.day }}
              
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script>
export default {
  data() {
    return {
      currentMonth: '',
      currentYear: '',
      calendar: [],
      selectedDate: null
    }
  },
  mounted() {
    this.currentMonth = this.getMonthName(new Date().getMonth())
    this.currentYear = new Date().getFullYear()
    this.generateCalendar()
  },
  methods: {
    getMonthName(monthIndex) {
      let months = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
      ]
      return months[monthIndex]
    },
    generateCalendar() {
      let calendar = []
      let week = []
      let totalDays = new Date(
        this.currentYear,
        this.getMonthIndex(this.currentMonth) + 1,
        0
      ).getDate()
      let firstDayIndex = new Date(
        this.currentYear,
        this.getMonthIndex(this.currentMonth),
        1
      ).getDay()
      for (let i = 0; i < firstDayIndex; i++) {
        week.push({ day: '', date: '', inMonth: false, selected: false })
      }
      for (let i = 1; i <= totalDays; i++) {
        let date = new Date(this.currentYear, this.getMonthIndex(this.currentMonth), i)
        let selected = this.selectedDate
          ? date.toLocaleDateString() === this.selectedDate.toLocaleDateString()
          : false
        week.push({
          day: i,
          date,
          inMonth: true,
          selected
        })
        if (week.length === 7) {
          calendar.push(week)
          week = []
        }
      }
      while (week.length < 7) {
        week.push({ day: '', date: '', inMonth: false, selected: false })
      }
      if (week.length) {
        calendar.push(week)
      }
      this.calendar = calendar
    },
    selectDate(day) {
      if (day.inMonth) {
        this.selectedDate = day.date
        this.generateCalendar()
      }
    },
    prevMonth() {
      let now = new Date()
      let year = this.currentYear
      let month = this.currentMonth
      let months = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
      ]
      let index = months.indexOf(month)
      if (index === 0) {
        year -= 1
        index = 11
      } else {
        index -= 1
      }
      month = months[index]
      this.currentMonth = month
      this.currentYear = year
        this.generateCalendar()
    },
    nextMonth() {
      let now = new Date()
      let year = this.currentYear
      let month = this.currentMonth
      let months = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
      ]
      let index = months.indexOf(month)
      if (index === 11) {
        year += 1
        index = 0
      } else {
        index += 1
      }
      month = months[index]
      this.currentMonth = month
      this.currentYear = year
      this.generateCalendar()
    },
    getMonthIndex(month) {
      let months = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
      ]
      return months.indexOf(month)
    }
    }
    }

    </script>

