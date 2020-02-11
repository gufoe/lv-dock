<template>
  <be-container>
    <template slot="header">
      Messaggi {{ $t(type) }}
    </template>
    <button type="button" @click="create()">Nuovo</button>
    <div class="table-responsive">
      <div v-if="!data">
        <i>Caricamento...</i>
      </div>
      <table v-else class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Data</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="mx in data" :key="mx.id">
            <td><pre>{{ mx.id }}</pre></td>
            <td><pre>{{ mx.type }}</pre></td>
            <td>{{ $d($utc(mx.created_at)) }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </be-container>
</template>

<script>
export default {
  props: {
    type: false,
  },

  data () {
    return {
      data: null,
    }
  },

  created () {
    this.refresh()
  },

  methods: {
    refresh () {
      axios.get(`messages/${this.type}`).then(res => {
        this.data = res.data
      })
    },
    create () {
      axios.post(`messages/${this.type}`).then(res => {
        this.data.unshift(res.data)
      })
    },
  }
}
</script>

<style lang="sass">
</style>
