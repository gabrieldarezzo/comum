<template src="./enderecos.html" lang="html">
</template>
<script>
import RegiaoService from '../../../../service/RegiaoService'
import dictionary from '../../../../validators/dictionary'
export default {
  name: 'app-enderecos',
  data () {
    return {
      dictionary,
      optPaises: [],
      forGroup: {
        enderecos: [{}]
      }
    }
  },
  props: {
    finalModel: {
      type: Object
    }
  },
  methods: {
    validate () {
      const isValid = this.$validator.validateAll().then((result) => {
        return (result)
      })
      this.$emit('on-validate', this.$data, isValid)
      return isValid
    },
    addRow (index) {
      this.forGroup.enderecos.splice(index + 1, 0, {})
    },
    removeRow (index) {
      this.forGroup.enderecos.splice(index, 1)
    },
    thClassValue: function (id, text) {
      var value = [text + id]
      if (this.orderKey === id) {
        value.push('active')
      }
      return value.join(' ')
    }
  },
  mounted () {
    RegiaoService.getPaises().then(response => {
      this.optPaises = response.data
    })
  }
}
</script>
