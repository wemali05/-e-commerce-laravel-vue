
<template>
    <div class="row">
        <div class="pagination-custom">
            <a href="javascript:void(0)" v-on:click.prevent="changePage(pagination.current_page - 1)">&laquo;</a>
            <a href="javascript:void(0)" v-for="page in pagesNumber" :key="page" :class="{'active': page == pagination.current_page}" v-on:click.prevent="changePage(page)" >{{ page }}</a>
            <a href="javascript:void(0)" v-on:click.prevent="changePage(pagination.current_page + 1)">&raquo;</a>
        </div>
    </div>
</template>
<script>
  export default{
      props: {
      pagination: {
          type: Object,
          required: true
      },
      offset: {
          type: Number,
          default: 4
      }
    },
    computed: {
      pagesNumber() {
        if (!this.pagination.to) {
          return [];
        }
        let from = this.pagination.current_page - this.offset;
        if (from < 1) {
          from = 1;
        }
        let to = from + (this.offset * 2);
        if (to >= this.pagination.last_page) {
          to = this.pagination.last_page;
        }
        let pagesArray = [];
        for (let page = from; page <= to; page++) {
          pagesArray.push(page);
        }
          return pagesArray;
      }
    },
    methods : {
      changePage(page) {
        this.pagination.current_page = page;
        this.$emit('paginate');
      }
    }
  }
</script>
