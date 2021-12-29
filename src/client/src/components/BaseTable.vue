<template>
  <table class="table">
    <thead class="table__header">
      <tr class="table__row">
        <th
          v-for="(label, index) in labels"
          :key="index"
          class="table__header-cell"
        >
          {{ label | capitalize }}
        </th>
      </tr>
    </thead>

    <tbody class="table__body">
      <tr v-for="(item, index) in items" :key="index" class="table__row">
        <td v-for="label in labels" :key="label" class="table__cell">
          {{ item[label] }}
        </td>
      </tr>
    </tbody>

    <tfoot class="table__footer">
      <tr class="table__row">
        <th
          v-for="(label, index) in labels"
          :key="index"
          class="table__header-cell"
        >
          {{ label | capitalize }}
        </th>
      </tr>
    </tfoot>
  </table>
</template>

<script>
export default {
  name: "BaseTable",
  props: {
    items: Array,
  },
  filters: {
    capitalize(value) {
      if (!value) return "";
      value = value.toString();
      return value.charAt(0).toUpperCase() + value.slice(1);
    },
  },
  data() {
    return {
      labels: [],
    };
  },

  methods: {
    hasItemWithOtherLength() {
      for (let index = 1; index < this.items.length; index++) {
        if (
          Object.keys(this.items[index - 1]).length !==
          Object.keys(this.items[index]).length
        )
          return true;
      }

      return false;
    },
  },

  created() {
    if (this.hasItemWithOtherLength())
      throw new Error("All items in array should be identical length!");

    this.labels = Object.keys(this.items[0]);
  },
};
</script>

<style lang="scss" scoped>
.table {
  width: 100%;

  border-spacing: 0;

  &__header-cell {
    padding: 1rem 0.7rem;

    color: var(--secondary-color);

    text-align: left;
    font-weight: 500;
  }

  &__row {
    color: var(--secondary-color);

    &:nth-of-type(2n) {
      color: #000;
      background-color: #f6f6f6;
    }
  }

  &__cell {
    padding: 1rem 0.7rem;

    line-height: 1.8;
  }
}
</style>